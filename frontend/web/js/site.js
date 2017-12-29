// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myScrollToTopButton").style.display = "block";
    } else {
        document.getElementById("myScrollToTopButton").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera
    document.documentElement.scrollTop = 0; // For IE and Firefox
}
function bottomFunction() {
	// window.scrollTo(0, document.body.scrollHeight);
	var objDiv = document.getElementsByClassName("wrap")[0];
	document.body.scrollTop = objDiv.scrollHeight;
	document.documentElement.scrollTop = objDiv.scrollHeight;
}

function downToExamples() {
    document.getElementById("verbsr-examples-0-example").scrollIntoView(true);
    window.scrollBy(0, -100);
    document.getElementById("verbsr-examples-0-example").focus();
}

function downToExamples2() {
    document.getElementsByName("examples")[0].scrollIntoView(true);
    window.scrollBy(0, -100);
}

function scrollTo(hash) {
    location.hash = "#" + hash;
}

