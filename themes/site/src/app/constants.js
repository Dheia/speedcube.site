// the current year
export const currentYear = (new Date()).getFullYear();

// bezier curves
export const easeInCubic = [0.55, 0.055, 0.675, 0.19];
export const easeInOutCubic = [0.645, 0.045, 0.355, 1];
export const easeOutCubic = [0.215, 0.61, 0.355, 1];

// detect firefox
export const isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;

// determine if we're in a production environment
export const isProduction = process.env.NODE_ENV === 'production';

// determine if we're un a unit testing environment
export const isTesting = process.env.NODE_ENV === 'testing';

// @todo: determine if we're using a touch device
export const isTouch = false;

// key codes
export const enterKeyCode = 13;
export const spacebarKeyCode = 32;