# TODO: Add Materials Form to Course Creation

## Plan Implementation Steps:

### 1. Update CourseRequest Validation
- [x] Add validation rules for materials array
- [x] Validate each material's required fields (title, number_of_series, intro, content_type)
- [x] Add conditional validation for video_code and text_content

### 2. Update CourseController
- [x] Modify store() method to handle materials creation
- [x] Create materials as Series after course creation
- [x] Handle materials data processing

### 3. Update Course Create Form View
- [x] Add "Course Materials" section to the form
- [x] Include dynamic form fields for materials
- [x] Add JavaScript for content type switching
- [x] Add functionality to add/remove multiple materials

### 4. Update Course Edit Form View (Bonus)
- [x] Add materials section to edit form
- [x] Load existing materials for editing
- [x] Handle updating and deleting existing materials
- [x] Add same JavaScript functionality

### 5. Testing
- [ ] Test form submission with materials
- [ ] Test different content types (video, text, quiz)
- [ ] Verify validation works correctly
- [ ] Check materials are created properly in database
- [ ] Test editing existing materials
