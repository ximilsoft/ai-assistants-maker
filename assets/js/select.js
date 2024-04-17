// twice_click_select_all_inside_pre

document.addEventListener('DOMContentLoaded', function() {
    var codeBlock = document.getElementById('codeBlock');
    var clickCount = 0;

    codeBlock.addEventListener('click', function() {
        clickCount++;
        setTimeout(function() {
            if (clickCount === 2) {
                selectText(codeBlock);
            }
            clickCount = 0;
        }, 300);
    });

    // Function to select all text inside an element
    function selectText(element) {
        var range, selection;

        if (document.body.createTextRange) {
            range = document.body.createTextRange();
            range.moveToElementText(element);
            range.select();
        } else if (window.getSelection) {
            selection = window.getSelection();
            range = document.createRange();
            range.selectNodeContents(element);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    }
});
