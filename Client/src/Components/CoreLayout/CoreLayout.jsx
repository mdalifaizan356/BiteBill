import React from 'react'
import { Container, Row, Col} from 'react-bootstrap';
import { Link } from 'react-router-dom';

const CoreLayout = () => {
  return (
    <>
      <Container>
        <Row>
          <Col>Header</Col>
        </Row>
        <Row>
          <Col>
            <nav>
              <ul>
                <li><Link to={'/'}>Home</Link></li>
                <li><Link to={'/Aboutus'}>About Us</Link></li>
                <li><Link to={'/Contactus'}>Contact Us</Link></li>
                <li><Link to={'SignUp'}>Sign Up</Link></li>
                <li><Link to={'SignIn'}>Sign In </Link></li>
              </ul>
            </nav>
          </Col>
        </Row>
      </Container>
    </>
  )
}

export default CoreLayout