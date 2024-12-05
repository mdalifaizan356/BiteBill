import { BrowserRouter, Routes, Route } from 'react-router-dom';
import './App.css'
// import { Container, Row, Col } from 'react-bootstrap';
import CoreLayout from './Components/CoreLayout/CoreLayout';
import Home from './Pages/Home/Home';
import About from './Pages/AboutUs/About';
import Contact from './Pages/ContactUs/Contact';
import SignUp from './Pages/SignUp/SignUp';
import SignIn from './Pages/SignIn/SignIn';
import PNF from './Pages/PNF/PNF';

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path='/' element={<CoreLayout />} />
        <Route path='/SignUp' element={<SignUp />} />
        <Route path='/SignIn' element={<SignIn />} />
        <Route path='*' element={<PNF />} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
