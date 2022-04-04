function darkModeSetup() {

    // Detects whether there is the variable 'darkmode' stored or not
    // If there is no value, stores TRUE
    if (localStorage.getItem("darkMode") == null) {
        localStorage.setItem("darkMode", false);
    }

    // Converts the stored value (type:string) to a boolean
    var isDark = (localStorage.getItem("darkMode") == "true") ? true : false;

    // Creates a <label> to switch Dark Mode
    var darkSwitch = document.createElement('label');
    darkSwitch.setAttribute('for', 'dark-mode');

    // Changes the background color of body according to the state of Dark Mode
    if (isDark == true) {
        document.body.className = "dark";
        
        let src = document.getElementById('logo').getAttribute('src');
        src = src.replace('blue-font','blue-font-dark');
        document.getElementById('logo').setAttribute('src',src);

    } else {
        document.getElementById("dark-mode").checked = false;
    }

    // Inserts the elements according to the detected device (mobile / desktop)
    let nav = document.getElementById("menu-label").children[0];
    if (window.matchMedia("(orientation: portrait)").matches) {
        nav.insertBefore(darkSwitch, nav.firstChild);
        console.log('Device is Mobile');
    } else {
        nav.appendChild(darkSwitch);
        console.log('Device is not Mobile');
    }

    // Logs the Dark Mode state
    console.log("Dark Mode Enabled by Default: " + isDark);
}

function darkMode() {
    // Detects the state of the Dark Mode <input> (checked or not checked)
    var isDark = document.getElementById("dark-mode").checked;

    // Changes the background color of body according to the state of Dark Mode
    if (isDark == true) {
        document.body.className = "dark";

        let src = document.getElementById('logo').getAttribute('src');
        src = src.replace('blue-font','blue-font-dark');
        document.getElementById('logo').setAttribute('src',src);

        console.log("Dark Mode is enabled.");
    } else {
        document.body.removeAttribute('class');
        
        let src = document.getElementById('logo').getAttribute('src');
        src = src.replace('blue-font-dark','blue-font');
        document.getElementById('logo').setAttribute('src',src);

        console.log("Dark Mode is disabled.");
    }

    // Stores the current state of the Dark Mode within localStorage
    localStorage.setItem("darkMode", isDark);

}