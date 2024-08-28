import logo from './logo.svg';
import './App.css';
import Name from './component/Name/Name';
import Section from './component/Section/Section';
import Description from './component/Description/Description';



function App() {
  const userInformation = {
    firstname: "Ian",
    lastname: "Llabore",
    section: "BSIT-3A",
    description: "description"
  }
  return (
    <div className="App">
      
        <Name firstname={userInformation.firstname}lastname={userInformation.lastname}/>
        <Section section={userInformation.section}/>
        <Description description={userInformation.description}/>
        

    </div>
  );
}

export default App;
