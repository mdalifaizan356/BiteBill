import React from 'react';
import { Container, Row, Col } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';

const Footer = () => {
  return (
    <Container fluid className='bg-dark text-light p-2 full-width'>
      <Row>
        <Col>
          <h1>Footer</h1>
        </Col>
      </Row>
    </Container>
  );
};

export default Footer;
