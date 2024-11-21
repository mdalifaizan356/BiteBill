import React from 'react'
import { Link } from 'react-router-dom';


const SignIn = () => {
  return (
    <>
      <div>SignIn</div>
      <Link to={'/SignUp'}>SignUp</Link>
    </>
  )
}

export default SignIn