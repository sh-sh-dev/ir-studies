<?php
ini_set('max_execution_time', 300);
$fileCounter = array();
$totalLines = countLines('.', $fileCounter);
echo $totalLines ." lines in the current folder<br>";
echo $totalLines - $fileCounter['gen']['commentedLines'] - $fileCounter['gen']['blankLines'] ." actual lines of code (not a comment or blank line)<br><br>";
foreach($fileCounter['gen'] as $key=>$val) {
    echo ucfirst($key).":".$val."<br>";
}
echo "<br>";
foreach($fileCounter as $key=>$val) {
    if(!is_array($val)) echo strtoupper($key).":".$val." file(s)<br>";
}
function countLines($dir, &$fileCounter) {
    $_allowedFileTypes = "(html|htm|phtml|php|js|css|ini|sql|scss|txt)";
    $lineCounter = 0;
    $dirHandle = opendir($dir);
    $path = realpath($dir);
    $nextLineIsComment = false;
    if($dirHandle) {
        while(false !== ($file = readdir($dirHandle))) {
            if(is_dir($path."/".$file) && ($file !== '.' && $file !== '..')) {
                $lineCounter += countLines($path."/".$file, $fileCounter);
            }
            elseif($file !== '.' && $file !== '..') {
                $ext = _findExtension($file);
                if(preg_match("/".$_allowedFileTypes."$/i", $ext)) {
                    $realFile = realpath($path)."/".$file;
                    $fileHandle = fopen($realFile, 'r');
                    $fileArray = file($realFile);
                    for($i=0; $i<count($fileArray); $i++) {
                        if($nextLineIsComment) {
                            $fileCounter['gen']['commentedLines']++;
                            if(strpos($fileArray[$i], '*/')) {
                                $nextLineIsComment = false;
                            }
                        }
                        else {
                            if(strpos($fileArray[$i], 'function')) {
                                $fileCounter['gen']['functions']++;
                            }
                            if(strpos($fileArray[$i], '//')) {
                                $fileCounter['gen']['commentedLines']++;
                            }
                            if(substr(trim($fileArray[$i]), 0, 5) == 'class') {
                                $fileCounter['gen']['classes']++;
                            }
                            if(strpos($fileArray[$i], '/*')) {
                                $nextLineIsComment = true;
                                $fileCounter['gen']['commentedLines']++;
                                $fileCounter['gen']['commentBlocks']++;
                            }
                            if(trim($fileArray[$i]) == '') {
                                $fileCounter['gen']['blankLines']++;
                            }
                        }
                    }
                    $lineCounter += count($fileArray);
                }
                $fileCounter['gen']['totalFiles']++;
                $fileCounter[strtolower($ext)]++;
            }
        }
    }
    else echo 'Could not enter folder';
    return $lineCounter;
}
function _findExtension($filename) {
    $filename = strtolower($filename) ;
    $exts = preg_split("[/\\.]", $filename) ;
    $n = count($exts)-1;
    $exts = $exts[$n];
    return $exts;
}