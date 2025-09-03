# TODO: Add Mentor Selection to Course Creation Form

## Completed Tasks
- [x] Create migration to add mentor_id to courses table
- [x] Run migration
- [x] Update Course model: add mentor_id to fillable, add mentor relationship
- [x] Update Mentor model: change to hasMany courses
- [x] Update CourseRequest: add mentor_id validation
- [x] Update CourseController create(): pass mentors to view
- [x] Update CourseController edit(): pass mentors to view
- [x] Update create.blade.php: add mentor select field
- [x] Update edit.blade.php: add mentor select field

## Summary
Form untuk memilih mentor telah ditambahkan di form pembuatan course. Data mentor diambil dari tabel mentors yang sudah ada. Mentor bersifat opsional (nullable).

## Next Steps
- Test the form to ensure it works correctly
- If needed, update any other views that display course information to show mentor
