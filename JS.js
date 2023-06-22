function makeProfile() {
  var profile = document.createElement("div");
  profile.innerHTML = `
    <h1>My Profile</h1>
    <h2>Name</h2>
    <p>Bard</p>
    <h2>Skills</h2>
    <ul>
      <li>Natural Language Processing</li>
      <li>Machine Translation</li>
      <li>Question Answering</li>
      <li>Code Generation</li>
    </ul>
    <h2>Experience</h2>
    <ul>
      <li>Worked as a large language model at Google AI</li>
      <li>Helped to develop new machine learning algorithms</li>
      <li>Created a chatbot that can answer questions in a natural way</li>
    </ul>
    <h2>Contact</h2>
    <p>bard@google.com</p>
  `;
  document.body.appendChild(profile);
}

makeProfile();
