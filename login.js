var theForm = document.forms['form2'];
if (!theForm) {
  theForm = document.form2;
}


function __doPostBack(eventTarget, eventArgument) {
  if (!theForm.onsubmit || theForm.onsubmit() != false) {
	  console.log(theForm);
      theForm.__EVENTTARGET.value = eventTarget;
      theForm.__EVENTARGUMENT.value = eventArgument;
    theForm.submit();
  }
}