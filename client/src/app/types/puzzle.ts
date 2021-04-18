/**
 * Cube configuration
 */
export type CubeConfig = PuzzleConfig & {
  /**
   * Colors
   *
   * [U, L, F, R, B, D]
   */
  colors: string[],

  /**
   * Inner brightness
   *
   * 0 = transparent
   * 1 = opaque
   */
  innerBrightness: number,

  /**
   * Sticker elevation
   *
   * 0 = no elevation
   * 1 = layer width elevation
   */
  stickerElevation: number,

  /**
   * Sticker radius
   *
   * 0 = no radius
   * 1 = half the distance to nearest corner
   */
  stickerRadius: number,

  /**
   * Sticker spacing
   *
   * 0 = no spacing
   * 1 = layer width spacing
   */
  stickerSpacing: number,
}

/**
 * Puzzle config
 */
export type PuzzleConfig = {
  /**
   * Camera angle
   *
   * 0 = looking at front of puzzle
   * 90 = looking at top of puzzle
   */
  cameraAngle: number,

  /**
   * Camera distance
   *
   * 0 = origin
   */
  cameraDistance: number,

  /**
   * Turn duration in milliseconds
   */
  turnDuration: number,
}