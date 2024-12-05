import React from 'react';
import { Navbar, Nav, Button, Container, Row, Col} from 'react-bootstrap';
import { Link } from 'react-router-dom';
import 'bootstrap/dist/css/bootstrap.min.css'; // Import bootstrap CSS;
import HeroImg from "../../../public/Hero.jpg"

const CoreLayout = () => {
  return (
    <>
      <Container fluid
      style={{
          backgroundImage: `url(${HeroImg})`,
          backgroundSize: 'cover',
          backgroundPosition: 'center',
          height: '100vh',
          display: 'flex',
          color: "white",
          alignItems: 'center',
          filter: 'blur(0.2px)', 
          opacity: 0.8, 
        }}
      >
        <Row>
          <Col md={12}>
            <h1 style={{ fontSize: '3rem', fontWeight: 'bold', color: 'red', }}>Welcome to BiteBill</h1>
            <p style={{ fontSize: '1.2rem', marginTop: '10px' }}>
              Discover amazing features and solutions to boost your business.
            </p>
            <Button as={Link} to="/SignUp" variant="primary" size="lg" className="mt-3">Join</Button>
          </Col>
        </Row>
      </Container>
    </>
  );
};

export default CoreLayout;