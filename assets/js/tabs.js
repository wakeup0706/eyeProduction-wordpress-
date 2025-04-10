const tabs = document.querySelectorAll('.navtab');
const contents = document.querySelectorAll('.vision_articles');
const underline = document.querySelector('.underline');

function updateUnderline() {
  const activeTab = document.querySelector('.navtab.active');
  underline.style.width = `${activeTab.offsetWidth}px`;
  underline.style.left = `${activeTab.offsetLeft}px`;
}

tabs.forEach(tab => {
  tab.addEventListener('click', () => {
    tabs.forEach(t => t.classList.remove('active'));
    tab.classList.add('active');
    updateUnderline();
  });
});

window.addEventListener('resize', updateUnderline);
updateUnderline();