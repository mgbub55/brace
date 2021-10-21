

/* This view acts as a rendering template to render InitScript(and server-side Form's descriptor) in FormContainerBlock's client-side for Form[542b2fba-ed98-473a-9002-6547fdfd2737].
TECHNOTE: all serverside (paths, dynamic values) of EPiServerForms will be transfered to client side here in this section. */
(function initializeOnRenderingFormDescriptor() {
    // each workingFormInfo is store inside epi.EPiServer.Forms, lookup by its FormGuid
    var workingFormInfo = epi.EPiServer.Forms["542b2fba-ed98-473a-9002-6547fdfd2737"] = {
        Id: "542b2fba-ed98-473a-9002-6547fdfd2737",
        Name: "Contact Form",
        // whether this Form can be submitted which relates to the visitor's data (cookie, identity) and Form's settings (AllowAnonymous, AllowXXX)

        SubmittableStatus : {"submittable":true,"message":""},        
        ConfirmMessage : "",
        ShowNavigationBar : true,
        ShowSummarizedData : false,
        
        // serialize the dependency configuration of this form to clientside
        DependenciesInfo : [],
        // keep all fieldName which are not satisfied the field dependency conditions
        DependencyInactiveElements: [],

        // Validation info, for executing validating on client side
        ValidationInfo : [{"targetElementName":"__field_26088","targetElementId":"a39b1af9-c013-4a3c-adc1-45e98bb0e9b9","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26089","targetElementId":"217a264e-bae1-46a1-9504-56b546607b58","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26092","targetElementId":"ea658c77-57ef-421c-9ac7-9773ad419e09","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26093","targetElementId":"a0f2bbc3-62dd-483f-9c6d-be315c587f6e","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26094","targetElementId":"87544d60-7e19-45ea-945f-725fd0a05716","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26097","targetElementId":"01a92cf4-9b60-4910-906e-f31cb6abe1fc","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26098","targetElementId":"8e9bd0c3-62b4-4a0b-b258-e7125b17630d","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26099","targetElementId":"d2063598-8132-473d-aeba-bd49aeccc109","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}},{"type":"EPiServer.Forms.Implementation.Validation.DateMMDDYYYYValidator","description":null,"model":{"jsPattern":"^(((0[13578]|1[02])\\/(0[1-9]|[12]\\d|3[01])\\/((19|[2-9]\\d)\\d{2}))|((0[13456789]|1[012])\\/(0[1-9]|[12]\\d|30)\\/((19|[2-9]\\d)\\d{2}))|(02\\/(0[1-9]|1\\d|2[0-8])\\/((19|[2-9]\\d)\\d{2}))|(02\\/29\\/(19|[2-9]\\d)([02468][048]|[13579][26])))$","dotNetPattern":"^(((0[13578]|1[02])\\/(0[1-9]|[12]\\d|3[01])\\/((19|[2-9]\\d)\\d{2}))|((0[13456789]|1[012])\\/(0[1-9]|[12]\\d|30)\\/((19|[2-9]\\d)\\d{2}))|(02\\/(0[1-9]|1\\d|2[0-8])\\/((19|[2-9]\\d)\\d{2}))|(02\\/29\\/(19|[2-9]\\d)([02468][048]|[13579][26])))$","message":"Enter a date in the MM/DD/YYYY format.","validationCssClass":null,"additionalAttributes":null}}]},{"targetElementName":"__field_26100","targetElementId":"cdc27837-cd1c-4120-ba10-b55e89b1e2a7","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_26101","targetElementId":"1d8fec35-2450-45d9-9389-03a51d78966e","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}},{"type":"EPiServer.Forms.Implementation.Validation.RegularExpressionValidator","description":null,"model":{"jsPattern":null,"dotNetPattern":null,"message":"This field should be in \"\" format.","validationCssClass":null,"additionalAttributes":null}}]},{"targetElementName":"__field_26102","targetElementId":"c0eb3e9b-d261-4f62-9518-d33baa86e581","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}},{"type":"EPiServer.Forms.Implementation.Validation.EmailValidator","description":null,"model":{"jsPattern":"(^$)|(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-.]+$)","dotNetPattern":"(^$)|(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-.]+$)","message":"Enter a valid email address.","validationCssClass":null,"additionalAttributes":null}}]},{"targetElementName":"__field_30576","targetElementId":"13f267a4-8e26-4914-80fc-66c03b27fe6a","validators":[{"type":"EPiServer.Forms.Implementation.Validation.CaptchaValidator","description":null,"model":{"message":"Enter the characters you see in the picture.","validationCssClass":null,"additionalAttributes":null}}]}],
        // Steps information for driving multiple-step Forms.
        StepsInfo : {
            Steps: [{"index":0,"attachedUrl":"","dependField":null,"dependCondition":null,"isActive":true,"attachedContentLink":"","dependValue":"","elementName":"__field_","guid":"00000000-0000-0000-0000-000000000000"},{"index":1,"attachedUrl":"","dependField":null,"dependCondition":null,"isActive":true,"attachedContentLink":"","dependValue":null,"elementName":"__field_26096","guid":"c6c539a8-84b5-435b-b077-9e86364bb4c7"}]
        },
        FieldsExcludedInSubmissionSummary: [],
        ElementsInfo: {"__field_26088":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"First Name","customBinding":false},"__field_26089":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Last Name","customBinding":false},"__field_26090":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Middle Initial","customBinding":false},"__field_26092":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Address","customBinding":false},"__field_26093":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"City","customBinding":false},"__field_26094":{"type":"EPiServer.Forms.Implementation.Elements.SelectionElementBlock","friendlyName":"State","customBinding":false},"__field_26095":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Zip","customBinding":false},"__field_26097":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Day Phone","customBinding":false},"__field_26098":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Evening Phone","customBinding":false},"__field_26099":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Birthdate","customBinding":false},"__field_26100":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Mother's Maiden Name","customBinding":false},"__field_26101":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"User Code","customBinding":false},"__field_26102":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Email","customBinding":false},"__field_26103":{"type":"EPiServer.Forms.Implementation.Elements.SubmitButtonElementBlock","friendlyName":"Submit","customBinding":false}},
        DataSubmitController: "/EPiServer.Forms/DataSubmit"
        
    };
    
    /// TECHNOTE: Calculation at FormInfo level, and these values will be static input for later processing.
    workingFormInfo.StepsInfo.FormHasNoStep_VirtualStepCreated = true;  // this FLAG will be true, if Editor does not put any FormStep. Engine will create a virtual step, with empty GUID
    workingFormInfo.StepsInfo.FormHasNothing = false;  // this FLAG will be true if FormContainer has no element at all
    workingFormInfo.StepsInfo.AllStepsAreNotLinked = true;  // this FLAG will be true, if all steps all have contentLink=="" (emptyString)
})();
