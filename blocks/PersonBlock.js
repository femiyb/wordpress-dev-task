// blocks/PersonBlock.js

import { registerBlockType } from '@wordpress/blocks';
import { TextControl } from '@wordpress/components';

registerBlockType('people-manager/person-block', {
    title: 'Person Block',
    icon: 'businessman',
    category: 'common',
    attributes: {
        personName: {
            type: 'string',
            default: '',
        },
        // Add more attributes for other fields as needed.
    },
    edit: function (props) {
        const { attributes, setAttributes } = props;

        return (
            <div className={props.className}>
                <h3>Person Block</h3>
                <TextControl
                    label="Person Name"
                    value={attributes.personName}
                    onChange={(value) => setAttributes({ personName: value })}
                />
                {/* Add more fields for other attributes. */}
            </div>
        );
    },
    save: function () {
        // Return the saved content here.
        return null;
    },
});
