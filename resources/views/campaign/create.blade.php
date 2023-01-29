<form id="kt_modal_add_user_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
    <!--begin::Scroll-->
    <div class="d-flex flex-column scroll-y me-n7 pe-7" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px" style="max-height: 243px;">
        <!--begin::Input group-->
        <div class="fv-row mb-7 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Campaign Name</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Mailing List</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Sender Email Address</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Select Template</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">Start Date And Time</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-7 fv-plugins-icon-container">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-2">End Date And Time</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com">
            <!--end::Input-->
            <div class="fv-plugins-message-container invalid-feedback"></div>
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Scroll-->

    <!--begin::Actions-->
    <div class="text-center pt-15">
        <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
            Discard
        </button>

        <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
            <span class="indicator-label">
                Submit
            </span>
        </button>
    </div>
    <!--end::Actions-->
</form>