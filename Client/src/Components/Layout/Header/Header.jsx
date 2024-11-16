import React from 'react'
import {Container, Row, Col} from "react-bootstrap";
import 'bootstrap/dist/css/bootstrap.min.css';
import Logo from './Logo';


const Header = () => {
  return (
    <>
      <Container fluid className="border border-danger">
        <Row>
          <Col>
            <Logo/>
          </Col>
        </Row>
      </Container>
    </>
  )
}

export default Header