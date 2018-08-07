$(document).ready(function() {
    console.log('hello world');
    $('#accordionEntreprise').css('display', 'none');
    $('#ongletEntreprises').click(function(event) {
        $('#accordionClient').css('display', 'none');
        $('#accordionEntreprise').css('display', 'block');
        $('#ongletClients').removeClass('active');
        $(this).addClass('active');
    });
    $('#ongletClients').click(function(event) {
        $('#accordionEntreprise').css('display', 'none');
        $('#accordionClient').css('display', 'block');
        $('#ongletEntreprises').removeClass('active');
        $(this).addClass('active');
    });
});
