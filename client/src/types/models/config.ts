/**
 * Puzzle config
 */
export type Config<T = Record<string, any>> = {
  createdAt: string,
  data: T,
  id: number,
  puzzleId: number,
}
