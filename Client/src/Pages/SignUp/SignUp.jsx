import React from 'react';
import { Link } from 'react-router-dom';
import { Button, Container, Row, Col, Stack, Form } from 'react-bootstrap';
import 'bootstrap/dist/css/bootstrap.min.css';
import './SignUp.css';

const SignUp = () => {
  return (
    <>
      <Container fluid style={{ height: '100vh', backgroundColor:"" }}>
        <Row className="justify-content-center align-items-center" style={{ height: '100%' }}>
          <Col md={6} lg={4} className="border border-danger p-4 rounded">
            <Stack gap={3}>
              <h3 className="text-center mb-4">Sign Up</h3>
              <Form>
                <Form.Group className="mb-3" controlId="formBasicEmail">
                  <Form.Label>Full Name</Form.Label>
                  <Form.Control type="email" placeholder="Enter email" />
                </Form.Group>

                <Form.Group className="mb-3" controlId="formBasicEmail">
                  <Form.Label>Email address</Form.Label>
                  <Form.Control type="email" placeholder="Enter email" />
                </Form.Group>

                <Form.Group className="mb-3" controlId="formBasicEmail">
                  <Form.Label>Phone Number</Form.Label>
                  <Form.Control type="email" placeholder="Enter email" />
                </Form.Group>

                <Form.Group className="mb-3" controlId="formBasicPassword">
                  <Form.Label>Password</Form.Label>
                  <Form.Control type="password" placeholder="Password" />
                </Form.Group>

                <Form.Group className="mb-3" controlId="formBasicCheckbox">
                  <Form.Check type="checkbox" label="Check me out" />
                </Form.Group>

                <Button variant="success" type="submit" className="w-100">
                  Register
                </Button>

                <p className="text-center mt-3">
                  If Already Registered,{' '}
                  <Link to="/SignIn" style={{ color: 'blue', textDecoration: 'underline' }}>
                    Sign In
                  </Link>
                </p>
              </Form>
            </Stack>
          </Col>
        </Row>
      </Container>
    </>
  );
};

export default SignUp;
