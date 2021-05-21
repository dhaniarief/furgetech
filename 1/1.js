function Biodata(name, address, hobbies, is_married, school, skills) {
  this.name = name;
  this.address = address;
  this.hobbies = hobbies;
  this.is_married = new Boolean(is_married);
  this.school = new Object(school);
  this.skills = new Object(skills);
}

var Bio1 = new Biodata(
  "Dhani Arief",
  "Jalan Lembah Pinang Blok I.8 No.13, Pondok Kelapa, Duren Sawit, Jakarta Timur",
  ["Sepeda", "Jelajah Internet"],
  false,
  { highSchool: "SMAN 91", university: "UNSOED" },
  [{ HTML: "9/10" }, { CSS: "9/10" }, { JS: "8/10" }]
);

console.log(Bio1);
