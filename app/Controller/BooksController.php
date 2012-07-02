<?php
App::uses('AppController', 'Controller');
/**
 * Books Controller
 *
 * @property Book $Book
 */
class BooksController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Book->recursive = 0;
		$this->paginate = array(
			'limit' => 8,
			'page' => 1,
		);

		$this->set('books', $this->paginate());
	}
	
	public function search() {
		if ($this->request->is('post')) {
			$query = explode(" ",$this->request->data['Book']['query']);
		} else {
			$query = array("");
		}
		$results = array();
		foreach($query as $q) {
			$temp = array("OR"=>array('Book.titulo LIKE' => '%'.$q.'%','Book.subtitulo LIKE' => '%'.$q.'%','Book.autores LIKE' => '%'.$q.'%','Book.categoria LIKE' => '%'.$q.'%'));
			array_push($results,$temp);
		}
		$this->paginate = array(
			'limit' => 8,
			'page' => 1,
		);
		
		$this->set('books', $this->paginate('Book',array( "OR" => $results)));
		
		
	}
	
	
	public function votar($id = null, $calif = null) {
		$this->Book->id = $id;

		$book = $this->Book->read(null, $id);

		$suma = $book['Book']['calif_prom'];
		$cant = $book['Book']['calif_cant'];
		$prod = $suma * $cant;
		$prod = $prod + $calif;
		$cant = $cant + 1;
		$prom = $prod / $cant;

		$this->request->data['Book']['calif_prom'] = $prom;
		$this->request->data['Book']['calif_cant'] = $cant;

		$this->Book->save($this->request->data);

		$this->redirect(array('action' => 'view', $id));
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		$this->set('book', $this->Book->read(null, $id));		

	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Book->create();
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		}
		$rBooks = $this->Book->RBook->find('list');
		$tags = $this->Book->Tag->find('list');
		$this->set(compact('rBooks', 'tags'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Book->save($this->request->data)) {
				$this->Session->setFlash(__('The book has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The book could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Book->read(null, $id);
		}
		$rBooks = $this->Book->RBook->find('list');
		$tags = $this->Book->Tag->find('list');
		$this->set(compact('rBooks', 'tags'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Book->id = $id;
		if (!$this->Book->exists()) {
			throw new NotFoundException(__('Invalid book'));
		}
		if ($this->Book->delete()) {
			$this->Session->setFlash(__('Book deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Book was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	



}
