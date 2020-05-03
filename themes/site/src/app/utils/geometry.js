import { clamp } from 'lodash-es';
import { CircleGeometry, Shape, ShapeBufferGeometry } from 'three';
import { degreesToRadians } from './number';

/**
 * Create a regular polygon geometry.
 *
 * @param {number} radius   the radius of the polygon
 * @param {number} sides    number of sides
 *
 * @return {CircleGeometry}
 */
export function polygon(radius, sides) {
    const thetaStart = degreesToRadians(90); // <- start at 12'oclock
    const thetaLength = Math.PI * -2; // <- draw vertices clockwise

    return new CircleGeometry(radius, sides, thetaStart, thetaLength);
}

/**
 * Create a rounded rectangle geometries.
 *
 * @param  {Number}                 height
 * @param  {Number}                 width
 * @param  {Number}                 radius
 * @return {ShapeBufferGeometry}
 */
export function roundedRectangle(height, width, radius) {
    const shape = new Shape();

    shape.moveTo(0, radius);
    shape.lineTo(0, height - radius);
    shape.quadraticCurveTo(0, height, radius, height);
    shape.lineTo(width - radius, height);
    shape.quadraticCurveTo(width, height, width, height - radius);
    shape.lineTo(width, radius);
    shape.quadraticCurveTo(width, 0, width - radius, 0);
    shape.lineTo(radius, 0);
    shape.quadraticCurveTo(0, 0, 0, radius);

    return new ShapeBufferGeometry(shape);
}

/**
 * Helper to create a rounded square geometries.
 *
 * @param  {Number}                 size
 * @param  {Number}                 radius
 * @return {ShapeBufferGeometry}
 */
export function roundedSquare(size, radius) {
    return roundedRectangle(size, size, size * clamp(radius, 0, 0.5));
}
