import { Link } from '@inertiajs/react'
import Layout from './Layout'

export default function Index({ blogs }) {

    return (
        <>
            {/* <Head title="Welcome" /> */}
            <Layout>
                <div className='flex gap-4 flex-wrap p-4'>
                    {blogs.map((blog, index) => (
                        <div key={index} className='mb-4 p-4 bg-gray-200 w-64'>
                            <Link href={`/blog/${blog.id}`}>{blog.title}</Link>
                            <hr />
                            <p>{blog.description.length > 100
                                ? blog.description.substring(0, 100) + ' ...'
                                : blog.description
                            }</p>
                        </div>
                    ))}
                </div>
            </Layout>
        </>
    )
}
