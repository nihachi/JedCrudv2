(function() {

  var el = function(element) {
    if (element.charAt(0) === "#") {
      return document.querySelector(element);
    }

    return document.querySelectorAll(element);
  };

  // Variables
  var viewer = el("#viewer"),
    equals = el("#equals"),
    nums = el(".num"),
    ops = el(".ops"),
    CurrentNumber = "",
    FirstNumber = "",
    resultNum,
    operator;

  var setNum = function() {

    if (resultNum) {
      CurrentNumber = this.getAttribute("data-num");
      resultNum = "";
    }else{
      CurrentNumber += this.getAttribute("data-num");
    }
    viewer.innerHTML = CurrentNumber;
  };

  var moveNum = function() {
    FirstNumber = CurrentNumber;
    CurrentNumber = "";
    operator = this.getAttribute("data-ops");

    equals.setAttribute("data-result", "");
    viewer.innerHTML = FirstNumber+operator;

  };
  var displayNum = function() {

    FirstNumber = parseFloat(FirstNumber);
    CurrentNumber = parseFloat(CurrentNumber);

    switch (operator) {
      case "+":
        resultNum = FirstNumber + CurrentNumber;
        break;

      case "-":
        resultNum = FirstNumber - CurrentNumber;
        break;

      case "*":
        resultNum = FirstNumber * CurrentNumber;
        break;

      case "/":
        resultNum = FirstNumber / CurrentNumber;
        break;

      default:
        resultNum = CurrentNumber;

    }

    if (!isFinite(resultNum)) {
      if (isNaN(resultNum)) {
        resultNum = "Invalid";
      } else {
        resultNum = "";
      }
    }

    viewer.innerHTML = resultNum;
    equals.setAttribute("data-result", resultNum);

    FirstNumber = 0;
    CurrentNumber = resultNum;

  };

  var clearAll = function() {
    FirstNumber = "";
    CurrentNumber = "";
    viewer.innerHTML = "0";
    equals.setAttribute("data-result", resultNum);
  };

  for (var i = 0, l = nums.length; i < l; i++) {
    nums[i].onclick = setNum;
  }

  for (var i = 0, l = ops.length; i < l; i++) {
    ops[i].onclick = moveNum;
  }

  equals.onclick = displayNum;
  el("#clear").onclick = clearAll;

}());