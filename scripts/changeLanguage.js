function changeLanguage(lang){
    const form = new FormData();
    form.append('lang', lang);
    fetch('changeLanguage.php', {
        method: 'POST',
        body: form
    })
    window.location.reload();
}