function openTopMoviesTab(tabName) {
    switch (tabName) {
      case "top-month": {
        document.getElementsByClassName(tabName)[0].style.display = "none";
        document.getElementsByClassName("top-week")[0].style.display =
          "block";
        break;
      }
      case "top-week": {
        document.getElementsByClassName(tabName)[0].style.display = "none";
        document.getElementsByClassName("top-month")[0].style.display =
          "block";
        break;
      }
    }
  };