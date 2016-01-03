function ResetNav() {
    var _location = document.location.toString();
    var applicationNameIndex = _location.lastIndexOf('/') + 1;
    var applicationName = _location.substring(0, applicationNameIndex);
    var pageName = _location.replace(applicationName, '').trim().toLowerCase();
    $('.navbar-nav li').removeClass('active');
    
    if (pageName == '' || pageName == 'default.aspx')
        $('.navbar-nav li:eq(0)').addClass('active');
    else {
        $('.navbar-nav a').each(function () {
            var page = $(this).attr('href').toLowerCase();
            if (page == pageName) {
                var c = $(this).closest("ul").attr('class');
                if (c == 'dropdown-menu')
                    $(this).closest("ul").closest("li").addClass('active');
                else
                    $(this).closest("li").addClass('active');
            }
        });
    }
}

$(document).ready(function () {
    $("#tabsholder").tytabs({ tabinit: "1", fadespeed: "normal" });
    $("#tabsholder2").tytabs({prefixtabs: "tabz",prefixcontent: "contentz",classcontent: "tabscontent",tabinit: "3",catchget: "tab2",fadespeed: "normal"});
    $('#slideshow img:gt(0)').hide();
    setInterval(function () {$('#slideshow :first-child').fadeOut(1000).next('img').fadeIn(1000).end().appendTo('#slideshow');}, 5000);
    $('#mega-menu-tut').dcMegaMenu({rowItems: '3',speed: 'fast'}); 

    $('#ticker li:first').slideUp(function () { $(this).appendTo($('#ticker')).slideDown(); });
    setInterval(function () { $('#ticker li:first').slideUp(function () { $(this).appendTo($('#ticker')).slideDown(); }); }, 5000);
    ResetNav();

    $('.dropdown a,.header a,.navbar-nav a').each(function () {
        var hr = $(this).attr('href').toLowerCase();
        $(this).attr('href',hr);
    });
});

//</script><script type="text/javascript">
(function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date();
    a = s.createElement(o), m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga'); ga('create', 'UA-25375980-2', 'dreamsstudios.org'); ga('send', 'pageview');