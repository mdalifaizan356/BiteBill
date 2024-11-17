// import {Route, Routes } from 'react-router-dom';
import './App.css'
import {Routes, Route} from "react-router-dom";
import UserDashboard from './Pages/UserDashboard/UserDashboard';
import PNF from './Pages/PNF/PNF';
import Layout from './Components/Layout/Layout/Layout';
import Banner from './Components/Banner/Banner';

function App() {
  
  return (
    <>
    <Routes>
      <Route path='/' element={<Banner/>} />
      <Route path='/UserDashboard' element={<UserDashboard/>} />
      <Route path='*' element={<PNF />} />
    </Routes>
    </>
  )
}

export default App