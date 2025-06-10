export default function getUserAgentType() {
  const isMobileOrTablet = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
    navigator.userAgent
  );
  const isTablet =
    /iPad/i.test(navigator.userAgent) || (window.innerWidth > 768 && window.innerHeight > 768);
  let state = { mobile: false, tablet: false, desktop: false };

  if (isMobileOrTablet && !isTablet) {
    state = { mobile: true, tablet: false, desktop: false };
  } else if (isMobileOrTablet && isTablet) {
    state = { mobile: false, tablet: true, desktop: false };
  } else {
    state = { mobile: false, tablet: false, desktop: true };
  }

  return state;
}
