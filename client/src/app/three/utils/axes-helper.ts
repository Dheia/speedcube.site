import { AxesHelper } from 'three';

export type AxesHelperOptions = {
  // ...
}

/**
 * Axes helper
 */
export function useAxesHelper() {
  const axesHelper = new AxesHelper(100);

  return axesHelper;
}