document.addEventListener('DOMContentLoaded', function () {

    //headlineに色を設定するconst
    const headings = document.querySelectorAll('h1, h2, h3, h4, h5, h6');
    headings.forEach((heading) => {
        heading.style.color = '#3cb371'; // ここに希望するフォントの色を指定
    });

});