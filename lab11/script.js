// function myFunc (para) {
//   alert(para);
// }

// console.log(typeof myFunc);
// myFunc('hello world');

// function myFunc() {}
// var myObject = new myFunc();
// myObject.StringValue = "A String";
// alert(myObject.StringValue);
// var myObject2 = new myFunc();
// alert(myObject2.StringValue);

// function superClass() {
//   this.bye = superBye;
//   this.hello = superHello;
// }
// function subClass() {
//   this.abc = superClass;
//   this.abc();
//   this.bye = subBye;
// }
// function superHello() {
//   return "Hello superClass";
// }
// function superBye() {
//   return "Bye superClass";
// }
// function subBye() {
//   return "Bye subClass";
// }
// var newClass = new subClass();
// console.log(newClass.bye());
// console.log(newClass.hello());

// function Person(firstName, lastName) {
//   this.firstName = firstName;
//   this.lastName = lastName;
// }
// Person.prototype.showFullName = function () {
//   console.log(this.firstName + " " + this.lastName);
// };
// var justin = new Person("Justin", "Vo");
// console.log(justin); // Person {firstName: "Justin", lastName: "Vo"}
// justin.showFullName(); // Justin Vo

function dontClick () {
  alert ('I told you not to click');
}

function dontCheck () {
  alert ('Dont check me');
}

// document.querySelector('.click-button').addEventListener('mouseover', () => {
//   alert ('Dont check me');
// } );