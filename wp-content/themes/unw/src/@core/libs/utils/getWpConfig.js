export default function getWpConfig() {
  const json = document.getElementById('themeSettings')?.innerText || '{}';
  return JSON.parse(json);
}
