window.onload = function() {
    //Variables
    const Header = document.getElementById("header");
    const ToggleListButton = document.getElementById("ToggleList")

    //Functions
    function OpenHeaderList() {
        console.log("RanFunction")
        if (Header.className !== "ListOpen") {
            Header.className = "ListOpen";
        } else {
            Header.className = "ListClose";
        }
    }

    //Event Listeners
    ToggleListButton.addEventListener("click", OpenHeaderList);
}