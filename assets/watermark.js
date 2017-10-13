function addWatermark() {
    var selection = window.getSelection(),
        pagelink = '<br>' + 'برگرفته شده از برنامه ایران شناسی' + '<br>' + 'https://i-s.piorra.ir',
        copytext = selection + pagelink,
        newdiv = document.createElement('div');
    newdiv.style.position = 'absolute';
    newdiv.style.left = '-99999px';
    document.body.appendChild(newdiv);
    newdiv.innerHTML = copytext;
    selection.selectAllChildren(newdiv);
    window.setTimeout(function () {
        document.body.removeChild(newdiv);
    }, 1);
}
document.addEventListener('copy', addWatermark);