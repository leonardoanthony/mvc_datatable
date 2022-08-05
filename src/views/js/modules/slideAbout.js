export default function initSlideAbout() {
    
    const buttons = document.querySelectorAll('[data-collapse="button"]');
    const infos = document.querySelectorAll('[data-collapse="info"]');

    if (buttons && infos) {
        buttons.forEach((button, index) => {
            button.addEventListener("click", () => {
                infos[index].classList.toggle("ativo");
            });
        });
    }
}
