
alert('lllll');

function getQueryStringParameter(param) {
  console.log('here');
  const query = window.location.search;
  const urlParams = new URLSearchParams(query);

  return urlParams.get(param);
}

alert('hhhhh');



