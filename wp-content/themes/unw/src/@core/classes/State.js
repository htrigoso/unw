// import EventEmitter from 'events';

/**
 * A class that provides an implementation of an event emitter that can be used to publish and subscribe to events.
 */
class EventEmitter {
  /**
   * Initializes a new instance of the EventEmitter class.
   */
  constructor() {
    // An object to store the event listeners.
    this.listeners = {};
  }

  /**
   * Subscribes a listener function to an event.
   * @param {string} eventName - The name of the event to subscribe to.
   * @param {Function} listener - The listener function to be invoked when the event is published.
   */
  on(eventName, listener) {
    // Check if there is an existing event listener array for the specified event, if not create one.
    if (!this.listeners[eventName]) {
      this.listeners[eventName] = [];
    }

    // Add the listener function to the event listener array.
    this.listeners[eventName].push(listener);
  }

  /**
   * Unsubscribes a listener function from an event.
   * @param {string} eventName - The name of the event to unsubscribe from.
   * @param {Function} listener - The listener function to be removed from the event listener array.
   */
  off(eventName, listener) {
    // Check if there is an existing event listener array for the specified event, if not return.
    if (!this.listeners[eventName]) {
      return;
    }

    // Find the index of the listener function in the event listener array.
    const index = this.listeners[eventName].indexOf(listener);

    // If the listener function is found in the event listener array, remove it.
    if (index !== -1) {
      this.listeners[eventName].splice(index, 1);
    }
  }

  /**
   * Publishes an event and invokes all subscribed listener functions with the specified arguments.
   * @param {string} eventName - The name of the event to be published.
   * @param {...*} args - The arguments to be passed to the listener functions.
   */
  emit(eventName, ...args) {
    // Check if there is an existing event listener array for the specified event, if not return.
    if (!this.listeners[eventName]) {
      return;
    }

    // Invoke all the listener functions in the event listener array with the specified arguments.
    this.listeners[eventName].forEach((listener) => {
      listener.apply(null, args);
    });
  }
}

/**
 * The State class is a class that extends the EventEmitter class and provides functionality for managing application state.
 */
export default class State extends EventEmitter {
  constructor() {
    // Initialize state object and event emitter
    super();

    this.state = {};
    this.emitter = new EventEmitter();
  }

  /**
   * Merges the new state with the existing state using the spread operator,
   * updates the state property and emits a 'stateChanged' event with the updated state as an argument.
   * @param {object} newState - The new state object.
   */
  setState(newState) {
    // Merge new state with existing state using the spread operator
    this.state = { ...this.state, ...newState };

    // Emit a 'stateChanged' event and pass the updated state as an argument
    this.emitter.emit('stateChanged', this.state);
  }

  /**
   * Add a listener for the 'stateChanged' event and call the specified callback function.
   * @param {Function} callback - The function to be called when the state changes.
   * The function will receive the updated state as an argument.
   */
  subscribe(callback) {
    // Add a listener for the 'stateChanged' event and call the specified callback function
    this.emitter.on('stateChanged', callback);
  }

  /**
   * Remove a listener for the 'stateChanged' event.
   *
   * @param {Function} callback - The callback function to remove as a listener.
   */
  unsubscribe(callback) {
    // Remove the specified listener for the 'stateChanged' event
    this.emitter.off('stateChanged', callback);
  }

  /**
   * Clears the state object and emits a 'stateCleared' event.
   * @returns {void}
   */
  clearState() {
    // Clear the state object
    this.state = {};

    // Emit a 'stateCleared' event
    this.emitter.emit('stateCleared');
  }
}
