var td = document.querySelectorAll('td');

for (let i = 0; i < td.length; i++) {
  if (td[i].innerHTML.includes("true", 0) && !td[i].className.includes("gray-cell", 0)  && Number(td[i].innerHTML) !== isNaN) {
    td[i].style.color = 'green';
  }
};

