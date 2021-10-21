

/* This view acts as a rendering template to render InitScript(and server-side Form's descriptor) in FormContainerBlock's client-side for Form[6a74a1e3-eb7f-4d2c-aae1-673ea8d06e1d].
TECHNOTE: all serverside (paths, dynamic values) of EPiServerForms will be transfered to client side here in this section. */
(function initializeOnRenderingFormDescriptor() {
    // each workingFormInfo is store inside epi.EPiServer.Forms, lookup by its FormGuid
    var workingFormInfo = epi.EPiServer.Forms["6a74a1e3-eb7f-4d2c-aae1-673ea8d06e1d"] = {
        Id: "6a74a1e3-eb7f-4d2c-aae1-673ea8d06e1d",
        Name: "Contact Form",
        // whether this Form can be submitted which relates to the visitor's data (cookie, identity) and Form's settings (AllowAnonymous, AllowXXX)

        SubmittableStatus : {"submittable":true,"message":""},        
        ConfirmMessage : "",
        ShowNavigationBar : false,
        ShowSummarizedData : false,
        
        // serialize the dependency configuration of this form to clientside
        DependenciesInfo : [],
        // keep all fieldName which are not satisfied the field dependency conditions
        DependencyInactiveElements: [],

        // Validation info, for executing validating on client side
        ValidationInfo : [{"targetElementName":"__field_25945","targetElementId":"27ca60d1-abb1-4194-b2c8-366be3a681d6","validators":[{"type":"EPiServer.Forms.Implementation.Validation.RequiredValidator","description":null,"model":{"message":"This field is required.","validationCssClass":"ValidationRequired","additionalAttributes":{"required":"","aria-required":"true"}}}]},{"targetElementName":"__field_25949","targetElementId":"1b5a4417-5ea2-4b0e-a132-86ab2799496c","validators":[{"type":"EPiServer.Forms.Implementation.Validation.EmailValidator","description":null,"model":{"jsPattern":"(^$)|(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-.]+$)","dotNetPattern":"(^$)|(^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\\.[a-zA-Z0-9-.]+$)","message":"Enter a valid email address.","validationCssClass":null,"additionalAttributes":null}}]}],
        // Steps information for driving multiple-step Forms.
        StepsInfo : {
            Steps: [{"index":0,"attachedUrl":"","dependField":null,"dependCondition":null,"isActive":true,"attachedContentLink":"","dependValue":"","elementName":"__field_","guid":"00000000-0000-0000-0000-000000000000"}]
        },
        FieldsExcludedInSubmissionSummary: [],
        ElementsInfo: {"__field_25945":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Name","customBinding":false},"__field_25946":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Company","customBinding":false},"__field_25947":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Address","customBinding":false},"__field_25948":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Phone","customBinding":false},"__field_25949":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Email","customBinding":false},"__field_26076":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Number of ATMs","customBinding":false},"__field_26085":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"Funding Amount","customBinding":false},"__field_26086":{"type":"EPiServer.Forms.Implementation.Elements.TextboxElementBlock","friendlyName":"States","customBinding":false},"__field_25950":{"type":"EPiServer.Forms.Implementation.Elements.SubmitButtonElementBlock","friendlyName":"Submit","customBinding":false}},
        DataSubmitController: "/EPiServer.Forms/DataSubmit"
        
    };
    
    /// TECHNOTE: Calculation at FormInfo level, and these values will be static input for later processing.
    workingFormInfo.StepsInfo.FormHasNoStep_VirtualStepCreated = true;  // this FLAG will be true, if Editor does not put any FormStep. Engine will create a virtual step, with empty GUID
    workingFormInfo.StepsInfo.FormHasNothing = false;  // this FLAG will be true if FormContainer has no element at all
    workingFormInfo.StepsInfo.AllStepsAreNotLinked = true;  // this FLAG will be true, if all steps all have contentLink=="" (emptyString)
})();
