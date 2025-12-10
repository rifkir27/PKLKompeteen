# TODO: Fix undefined ⭐ rating mentor error

## Completed Tasks
- [x] Updated Mentor model getAvgRatingAttribute() to use loaded data efficiently
- [x] Removed redundant avg_rating assignment in MentorController

## Summary
The error "undefined ⭐ rating mentor" was caused by the getAvgRatingAttribute() accessor not properly handling cases where mentors have no courses or reviews. The accessor was updated to:
1. Use pre-loaded relationship data when available
2. Calculate average rating manually from loaded reviews
3. Fall back to database query if data not loaded
4. Always return a numeric value (0 if no ratings)

The redundant assignment in the controller was also removed to avoid potential issues.
