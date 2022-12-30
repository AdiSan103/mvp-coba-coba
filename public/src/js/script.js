// query class
function queryClass(theSelector) {
    return document.querySelector(theSelector);
    }
    
    // add class
    function addClass(theSelector, theClass) {
    return queryClass(theSelector).classList.add(theClass);
    }
    
    // remove class
    function removeClass(theSelector, theClass) {
    return queryClass(theSelector).classList.remove(theClass);
    }
    
    function hamburgerMenuClick() {
        if(window.innerWidth < 1000) {
            //cek class d-none
            if( queryClass('.navbarSidebar').classList.contains('Notshow') == false ) {
                // hamburger menu
                addClass('.hamburger-1', 'true');
                addClass('.hamburger-2', 'true');
                addClass('.hamburger-3', 'true');
    
                addClass('.navbarSidebar', 'Notshow');
                addClass('.navbarSidebar', 'transform--toLeft');
            }  else {
                // hamburger menu
                removeClass('.hamburger-1', 'true');
                removeClass('.hamburger-2', 'true');
                removeClass('.hamburger-3', 'true');
    
                removeClass('.navbarSidebar', 'transform--toLeft');
                removeClass('.navbarSidebar', 'Notshow');
            }
        }
    }
    
    function svgDropdown(data,data2) {
        if( data.contains('true') == true ) {
            removeClass('.' + data2, 'svgDropdown__toUp');
            removeClass('.' + data[0], 'true');
        }  else {
            addClass('.' + data2, 'svgDropdown__toUp');
            addClass('.' + data[0], 'true');
        }
    }
    
    function backIcon(data)
    {
        if(queryClass('.' + data).classList.contains('transform--toRight') == true) {
            removeClass('.' + data, 'transform--toRight');
        } else {
            addClass('.' + data, 'transform--toRight');
        }
    }

        // parallax
function windowScrollY(data, urlImg) {
    window.addEventListener("scroll", () => {

        let thisScroll = this.scrollY;
        let content = document.getElementsByClassName(data)[0];
        // console.log(thisScroll);
        // console.log(thisScroll);
        
        content.setAttribute(
            "style", 
            `
            background: url(` + urlImg + `);
            background-position: center -` + thisScroll / 8 + `px;
            background-size: cover;
            `
        );
    
    });
}

windowScrollY('banner', '../img/Asset\ 15.jpg');