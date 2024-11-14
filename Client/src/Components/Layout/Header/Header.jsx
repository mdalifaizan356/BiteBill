import React from 'react';
import { Link } from 'react-router-dom';
import { Container, Row, Col, Button, Form, Nav, Navbar, NavDropdown } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import "./Header.css";
import { FaShoppingCart } from "react-icons/fa";
import { IoEnterOutline } from "react-icons/io5";

const Header = () => {
  const containerStyle = {
    position: "fixed",
    top: "0px",
    width: "100%",
    backgroundColor: "#E9EED9",
    zIndex: 1000,
  };
 
  const navStyle = {
    width: "100%",
    backgroundColor: "blue",
    zIndex: 1000,
  };

  return (
      <>
      <Container fluid style={containerStyle} className="headerContainer">
        <Row className='headerBox'>
          <Col className="contactBar">
                <div className="emailLink">
                  <a><i className="fa-solid fa-envelope"> cpbagagency@gmail.com</i></a>
                </div>
                <div className="socialLink">
                    <a>Follow Us</a>
                    <Link  to="/*"><i className="fa-brands fa-facebook"></i></Link>
                    <Link  to="/*"><i className="fa-brands fa-whatsapp"></i></Link>
                    <Link  to="/*"><i className="fa-brands fa-twitter"></i></Link>
                    <Link  to="/*"><i className="fa-brands fa-youtube"></i></Link>
                    <Link  to="/*"><i className="fa-brands fa-linkedin-in"></i></Link>
                    <Link  to="/*"><i className="fa-brands fa-instagram"></i></Link>
                    <Link  to="/*"><i className="fa-brands fa-pinterest"></i></Link>
                </div>
          </Col>
        </Row>
        <Row className="g-1">
          <Navbar expand="lg" className="bg-body-tertiary">
          <Navbar.Brand as={Link} to="/">CP BagEGENCY</Navbar.Brand>
          <Navbar.Toggle aria-controls="navbarScroll" />
          <Navbar.Collapse id="navbarScroll">
          <Col className="me-auto my-2 my-lg-0"
                style={{ maxHeight: '100px' }}
                >
          <Nav>
          <NavDropdown title={<>Account<IoEnterOutline /></>} id="navbarScrollingDropdown">
                  <NavDropdown.Item as={Link} to="/signup">Sign in</NavDropdown.Item>
                  <NavDropdown.Item as={Link} to="/registration" href="#action3">New Customer?</NavDropdown.Item>
                </NavDropdown>
              </Nav>  
          </Col>
          <Col className="me-auto my-2 my-lg-0"
                style={{ maxHeight: '100px' }}
                >
          <Nav>
            <Nav.Link href="#action1">Cart<FaShoppingCart/></Nav.Link>
          </Nav>  
          </Col>
          <Col sm={4} className="me-auto my-2 my-lg-0"
                style={{ maxHeight: '100px' }}
                >
          <Form className="d-flex">
                <Form.Control
                  type="search"
                  placeholder="Search"
                  className="me-2"
                  aria-label="Search"
                />
                  <Button variant="outline-success">Search</Button>
              </Form>
          </Col>
          <Col className="me-auto my-2 my-lg-0 d-flex justify-content-center"
                style={{ maxHeight: '100px'}}
                >
          </Col>
          </Navbar.Collapse>
          </Navbar>
        </Row>
      </Container>
    </>
  );
}

export default Header;