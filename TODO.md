# TODO: Change Video Upload to File Upload

## Plan Implementation Steps:

### 1. Update Validation Rules
- [x] Update `app/Http/Requests/CourseRequest.php` - Change video_code validation to accept video file uploads
- [x] Update `app/Http/Requests/SeriesRequest.php` - Change video_code validation to accept video file uploads

### 2. Update Course Forms
- [x] Update `resources/views/admin/course/create.blade.php` - Replace text input with file input for video upload
- [x] Update `resources/views/admin/course/edit.blade.php` - Replace text input with file input for video upload

### 3. Update Series Forms
- [x] Update `resources/views/admin/series/create.blade.php` - Replace text input with file input for video upload
- [x] Update `resources/views/admin/series/edit.blade.php` - Replace text input with file input for video upload

### 4. Update Show View
- [x] Update `resources/views/member/course/show_course.blade.php` - Replace iframe with HTML5 video player

### 5. Update Model
- [x] Update `app/Models/Series.php` - Add accessor for video file URL

### 6. Followup Steps
- [x] Ensure storage link is created (`php artisan storage:link`)
- [ ] Test video file upload and playback
- [ ] Handle existing Google Drive links (if any migration needed)
- [ ] Update controllers to handle file uploads and storage
