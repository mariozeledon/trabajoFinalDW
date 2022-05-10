<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
//Login
$routes->post('iniciar_sesion','Usuarios::iniciarSesion');
//Inicio
$routes->get('menu','Home::index');
//Tabla Usuarios
$routes->get('tablaUsuarios','Usuarios::cargarUsuarios');
$routes->get('eliminarUsuario/(:num)','Usuarios::eliminarUsuario/$1');
$routes->get('formAgregarUsuario','Usuarios::formularioAgregarUsuario');
$routes->get('agregarUsuario','Usuarios::agregarUsuario');
$routes->get('formActualizarUsuario/(:num)','Usuarios::formularioActualizarUsuario/$1');
$routes->get('actualizarUsuario','Usuarios::actualizarUsuario'); 
$routes->get('administrador','Usuarios::menuAdministrador');
//Tabla Tipo de Usuarios
$routes->get('tablaTipoUsuario','Tipos::cargarTipoU');
$routes->get('formAgregarTipoUsuario','Tipos::formularioAgregarTipo');
$routes->get('agregarTipoU','Tipos::agregarTipo');
$routes->get('formActualizarTipoUsuario/(:num)','Tipos::formularioActualizarTipo/$1');
$routes->get('actualizarTipo','Tipos::actualizarTipo');
$routes->get('eliminarTipoUsuario/(:num)','Tipos::eliminarTipo/$1');
//Tabla Regiones
$routes->get('encargado','Regiones::menuEncargado');
$routes->get('tablaRegiones','Regiones::cargarRegiones');   
$routes->get('formAgregarRegion','Regiones::formularioAgregarRegion');
$routes->get('agregarRegion','Regiones::agregarRegion');
$routes->get('formActualizarRegion/(:num)','Regiones::formularioActualizarRegion/$1');
$routes->get('actualizarRegion','Regiones::actualizarRegion');
$routes->get('eliminarRegion/(:num)','Regiones::eliminarRegion/$1');
// Tabla Departamentos
$routes->get('tablaDepartamentos','Departamentos::cargarDepartamentos');
$routes->get('formAgregarDepartamento','Departamentos::formularioAgregarDepto');
$routes->get('agregarDepartamento','Departamentos::agregarDepartamento');
$routes->get('formActualizarDepto/(:num)','Departamentos::formularioActualizarDepto/$1');
$routes->get('actualizarDepartamento','Departamentos::actualizarDepartamento');
$routes->get('eliminarDepto/(:num)','Departamentos::eliminarDepartamento/$1');
// Tabla Municipios
$routes->get('tablaMunicipios','Municipios::cargarMunicipios');
$routes->get('formAgregarMunicipio','Municipios::formularioAgregarMunicipio');
$routes->get('agregarMunicipio','Municipios::agregarMunicipio');
$routes->get('formActualizarMuni/(:num)','Municipios::formularioActualizarMuni/$1');
$routes->get('actualizarMunicipios','Municipios::actualizarMunicipios');
$routes->get('eliminarMuni/(:num)','Municipios::eliminarMuni/$1');
// Tabla Niveles Academicos
$routes->get('tablaNiveles','Niveles::cargarNiveles');
$routes->get('formAgregarNivel','Niveles::formularioAgregarNivel');
$routes->get('agregarNivel','Niveles::agregarNivel');
$routes->get('formActualizarNivel/(:num)','Niveles::formularioActualizarNivel/$1');
$routes->get('actualizarNivel','Niveles::actualizarNivel');
$routes->get('eliminarNivel/(:num)','Niveles::eliminarNivel/$1');
// Tabla Ciudadanos
$routes->get('operador','Ciudadanos::menuOperador');
$routes->get('tablaCiudadanos','Ciudadanos::cargarCiudadanos');
$routes->get('formAgregarCiudadano','Ciudadanos::formularioAgregarCiudadano');
$routes->get('agregarCiudadano','Ciudadanos::agregarCiudadano');
$routes->get('formActualizarCiudadano/(:num)','Ciudadanos::formularioActualizarCiudadano/$1');
$routes->get('actualizarCiudadano','Ciudadanos::actualizarCiudadano');
$routes->get('eliminarCiudadano/(:num)','Ciudadanos::eliminarCiudadano/$1');
// Usuario Ciudadano
$routes->get('login_ciudadano','Home::ciudadano');
$routes->post('inicio_sesion_ciudadano','Login_Ciudadanos::inicio_sesion_ciudadano');