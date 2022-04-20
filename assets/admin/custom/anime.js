function IsNumeric(n) {
    return !isNaN(n);
}

$(function() {
    $("#getit").click(function() {
        var numLow = 10000000000000000;
        var numHigh = 99999999999999999;

        var adjustedHigh = parseFloat(numHigh) - parseFloat(numLow) + 1;

        var numRand = Math.floor(Math.random() * adjustedHigh) + parseFloat(numLow);

        if (
            IsNumeric(numLow) &&
            IsNumeric(numHigh) &&
            parseFloat(numLow) <= parseFloat(numHigh) &&
            numLow != "" &&
            numHigh != ""
        ) {
            $("#randomnumber").text(numRand);
        } else {
            $("#randomnumber").text("Careful now...");
        }

        return false;
    });

    $("input[type=text]").each(function() {
        $(this).data("first-click", true);
    });

    $("input[type=text]").focus(function() {
        if ($(this).data("first-click")) {
            $(this).val("");
            $(this).data("first-click", false);
            $(this).css("color", "black");
        }
    });
});

function copy(that) {
    var inp = document.createElement('input');
    document.body.appendChild(inp)
    inp.value = that.textContent
    inp.select();
    document.execCommand('copy', false);
    inp.remove();
}