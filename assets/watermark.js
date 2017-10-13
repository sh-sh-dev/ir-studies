function addWatermark() {
    var selection = window.getSelection(),
    pagelink = '<br>' + 'برگرفته شده از برنامه ایران شناسی' + '<br>' + 'https://i-s.piorra.ir',
    copytext = selection + pagelink,
    newdiv = document.createElement('div');
    newdiv.style.display = 'none';
    document.body.appendChild(newdiv);
    newdiv.innerHTML = copytext;
    selection.selectAllChildren(newdiv);
    window.setTimeout(function () {
        // document.body.removeChild(newdiv);
        $(newdiv).remove()
    }, 100);
}
// document.addEventListener('copy', addWatermark);
