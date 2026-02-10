let iFrams = document.querySelectorAll("iframe");

iFrams.forEach((ifr, i) => {
  ifr.onload = () => {
    const iframeBody = ifr.contentDocument.body;
    iframeBody.style.backgroundColor = "transparent";
    // if(i==0)iframeBody.style.backgroundColor = '#2e4a6967';
  };
});
