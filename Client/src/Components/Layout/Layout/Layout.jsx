import React from 'react'
import Header from '../Header/Header';

const Layout = ({children}) => {
  return (
    <>
      <Header/>
      <main style={{ minHeight: '90vh', marginTop: '100px' }}>
        {children}
      </main>
    </>
  );
};

export default Layout;